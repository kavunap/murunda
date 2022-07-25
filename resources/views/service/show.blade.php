@extends('admin.layout')

@section('template_title')
    {{ $service->name ?? 'Show Service' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Service</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('services.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Days:</strong>
                            {{ $service->days }}
                        </div>
                        <div class="form-group">
                            <strong>Start Date:</strong>
                            {{ $service->start_date }}
                        </div>
                        <div class="form-group">
                            <strong>Request Type:</strong>
                            {{ $service->request_type }}
                        </div>
                        <div class="form-group">
                            <strong>Purpose:</strong>
                            {{ $service->purpose }}
                        </div>
                        <div class="form-group">
                            <strong>Results:</strong>
                            {{ $service->results }}
                        </div>
                        <div class="form-group">
                            <strong>Destination:</strong>
                            {{ $service->destination }}
                        </div>
                        <div class="form-group">
                            <strong>Return Date:</strong>
                            {{ $service->return_date }}
                        </div>
                        <div class="form-group">
                            <strong>M Transport:</strong>
                            {{ $service->m_transport }}
                        </div>
                        <div class="form-group">
                            <strong>Daily Amount:</strong>
                            {{ $service->daily_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Total Amount:</strong>
                            {{ $service->total_amount }}
                        </div>
                        <div class="form-group">
                            <strong>Successor:</strong>
                            {{ $service->successor }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $service->status }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $service->user_id }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5>Display Comments</h5>
                
                    @include('service.partials.replies', ['comments' => $service->comments, 'service_id' => $service->id])
    
                    <hr />
                   </div>
    
                   <div class="card-body">
                    <h5>Leave a comment</h5>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <label for="comment_type">Comment type</label>
                            <select name="comment_type" id="" class="form-control">
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approve</option>
                                <option value="Rejected">Reject</option>
                            </select>
                            <label for="comment">Comment</label>
                            <input type="text" name="comment" class="form-control" />
                            
                            <input type="hidden" name="service_id" value="{{ $service->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" value="Add Comment" />
                        </div>
                    </form>
                   </div>
            </div>
        </div>
    </section>
@endsection
