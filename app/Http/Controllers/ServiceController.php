<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

/**
 * Class ServiceController
 * @package App\Http\Controllers
 */
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate();

        return view('service.index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * $services->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $annually_leave_days = auth()->user()->annually_leave_days;
        $today = date('d-m-Y');
        $service = new Service();
        return view('service.create', compact('service','annually_leave_days','today'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Service::$rules);

        $input = $request->all();
        $input['return_date']= Carbon::parse($request->start_date)->addDays($request->days);
        $input['total_amount']=$request->daily_amount * $request->days;
        // if(auth()->user()->annually_leave_days >= $request->days){
        $service = Service::create($input);
        $user = auth()->user();
        $user->annually_leave_days -= $request->days;
        $user->save();
        return redirect()->route('services.index')
            ->with('success', 'Service created successfully.');
    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);

        return view('service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);

        return view('service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Service $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        request()->validate(Service::$rules);

        $service->update($request->all());

        return redirect()->route('services.index')
            ->with('success', 'Service updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $service = Service::find($id)->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted successfully');
    }

    public function genMission($id){
        $service = Service::find($id);
        return view('mission',compact('service'));
      }
      public function createPDF($id) {
        // retreive all records from db
        // $service = Service::find($id);
  
        // share data to view
        // view()->share('employee',$data);
        // $pdf = PDF::loadView('pdf_view', $data);
  
        // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');
        $service = Service::find($id);

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true, 'setIsRemoteEnabled'=>true])->loadView('mission',compact('service'));    
        return $pdf->download('murunda.pdf');
      }
}
