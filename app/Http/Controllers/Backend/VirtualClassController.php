<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MacsiDigital\Zoom\Facades\Zoom;
use MacsiDigital\Zoom\Support\Entry;
use MacsiDigital\Zoom\User;
use Carbon\Carbon;
use App\Models\VirtualClass;
use App\Http\Requests\StoreVirtualClassRequest;
use Auth;

class VirtualClassController extends Controller
{
    //protected $zoom;
    //protected $user;
    protected $classes;
    public function __construct( VirtualClass $class)
    {
        $this->middleware('auth');
        $this->classes = $class;
    }

    public function index(){
        $classes = $this->classes->get();
        return view('backend.virtual-classes.index', compact('classes'));
    }

    public function create(){
        return view('backend.virtual-classes.form');
    }

    public function store(StoreVirtualClassRequest $request){
        $class = $this->classes;

        $meeting = Zoom::meeting()->make([
            'topic' => $request->topic,
            'start_time' => $request->date." ".$request->time,
            'duration'=>$request->duration,
            ]);

        Zoom::user()->find('8ceJJscYTYW1vvg5HY-swA')->meetings()->save($meeting);

        $class->teacher_id = Auth::user()->id;
        $class->title = $request->title;
        $class->start_date = $request->date;
        $class->start_time = $request->time;
        $class->duration = $request->duration;
        $class->class_id = $meeting->id;
        $class->save();
        return redirect(route('virtualclass.index'))->with('success',['Success'=>'New Class Created Successfully']);
    }

    public function user_meetings(){
        $meetings = Zoom::user()->find('8ceJJscYTYW1vvg5HY-swA')->meetings;
        return $meetings;
    }

    public function create_meetings(){
        return view('backend.virtual-classes.form');

    }

    public function about_meeting(){
        $meeting = Zoom::meeting()->find('79268852795');
        return $meeting  ;
    }
}
