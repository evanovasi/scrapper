@extends('_partials.app')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end mb-2">
                        <a class="btn btn-success" href="{{ route('web-scrap.index') }}">Back</a>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h2>ARTICLE</h2>
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
                    <div class="card">
                        <div class="card-header">
                            <h2>SENTIMENT</h2>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Reason</th>
                                        <th scope="col">Sentiment</th>
                                        <th scope="col">Tone</th>
                                        <th scope="col">Object</th>
                                        <th scope="col">Topics</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($sentiments)
                                        @foreach ($sentiments as $sentiment)
                                            @foreach ($sentiment['Aspect Sentiments'] as $sent)
                                                <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $sent['subject'] }}</td>
                                                    <td>{{ $sent['reason'] }}</td>
                                                    <td>{{ $sent['sentiment'] }}</td>
                                                    <td>{{ $sent['tone'] }}</td>
                                                    <td>{{ $sent['object'] }}</td>
                                                    <td>{{ implode(', ', $sentiment['Topics']) }}</td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @else
                                        <tr>
                                            <td class="align-middle text-center" colspan="7">
                                                Data tidak ditemukan!
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $sentiment->links('pagination::bootstrap-4') }}
                            </ul>
                        </div> --}}
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
