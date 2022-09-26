@extends('layouts.admin.master')
@routes
@section('title')To-Do
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/todo.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>To-Do</h3>
		@endslot
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">To-Do</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-xl-12">
	            <div class="card">
	                <div class="card-header">
	                    <h5>To-Do</h5>
	                </div>
	                <div class="card-body pt-0">
	                    <div class="todo">
	                        <div class="todo-list-wrapper">
	                            <div class="todo-list-container">
	                                <div class="mark-all-tasks">
	                                    <div class="mark-all-tasks-container">
	                                        <span class="mark-all-btn" id="mark-all-finished" role="button">
	                                            <span class="btn-label">Mark all as finished</span>
	                                            <span class="action-box completed">
	                                                <i class="icon"><i class="icon-check"></i></i>
	                                            </span>
	                                        </span>
	                                        <span class="mark-all-btn move-down" id="mark-all-incomplete" role="button">
	                                            <span class="btn-label">Mark all as Incomplete</span>
	                                            <span class="action-box">
	                                                <i class="icon"><i class="icon-check"></i></i>
	                                            </span>
	                                        </span>
	                                    </div>
	                                </div>
	                                <div class="todo-list-body">
	                                    <ul id="todo-list">
										@foreach($todolist as $item)
										<li class="{{$item->isDone ? 'task' : 'completed task'}}">
	                                            <div class="task-container">
	                                                <h4 class="task-label">{{$item->todo}}</h4>
	                                                <span class="task-action-btn">
	                                                    <span class="action-box large delete-btn" title="Delete Task"  data-id="{{$item->id}}">
	                                                        <i class="icon"><i class="icon-trash"></i></i>
	                                                    </span>
														
	                                                    <span class="action-box large complete-btn" title="Mark Complete" data-id="{{$item->id}}">
	                                                        <i class="icon"><i class="icon-check"></i></i>
	                                                    </span>
	                                                </span>
	                                            </div>
	                                        </li>
										@endforeach
	                                        
	                                    </ul>
	                                </div>
	                                <div class="todo-list-footer">
	                                    <div class="add-task-btn-wrapper">
	                                        <span class="add-task-btn">
	                                            <button class="btn btn-primary"><i class="icon-plus"></i> Add new task</button>
	                                        </span>
	                                    </div>
	                                    <div class="new-task-wrapper">
	                                        <textarea id="new-task" placeholder="Enter new task here. . ."></textarea><span class="btn btn-danger cancel-btn" id="close-task-panel">Close</span>
	                                        <span class="btn btn-success ms-3 add-new-task-btn" id="add-task">Add Task</span>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="notification-popup hide">
	                            <p><span class="task"></span><span class="notification-text"></span></p>
	                        </div>
	                    </div>
	                
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	@push('scripts')
		<script src="{{asset('assets/js/todo.js')}}"></script>
	@endpush

@endsection