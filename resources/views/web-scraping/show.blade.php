@extends('_partials.app')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-tools">
                            
                            <h3 class="card-title"><a href="{{ route('web-scrap.index') }}" class="btn btn-success">Back</a>
                            </h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>Date</strong></td>
                                        <td>{{ $datascraping->date }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Title</strong></td>
                                        <td>{{ $datascraping->title }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Content</strong></td>
                                        <td>{{ $datascraping->content }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Hashtags</strong></td>
                                        <td>{{ $datascraping->hashtags }}</td>
                                    </tr>
                                    <tr>
                                        <td><strong>URL</strong></td>
                                        <td>{{ $datascraping->url }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
