@extends('layouts.app')

@section('content')
<div id="page" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    Site Checklist
                    <ul>
                        <li>Try not to use Bootstrap or jQuery</li>
                        <li>Use Vue.js and less|sass</li>
                        <li>Forms</li>
                        <li>Dynamic Fields</li>
                        <li>Respondants</li>
                        <li>
                            Queuing Jobs
                            <ul>
                                <li>Imports</li>
                                <li>Emails</li>
                            </ul>
                        </li>
                        <li>Queue Management</li>
                    </ul>

                </div>

            </div>
            <br >
            <div class="card">
                <div class="card-header">Here goes...</div>
                <div class="card-body">
                    <a>Create Form</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    console.log(app);
</script>
@endsection
