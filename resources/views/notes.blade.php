@extends('_Layout')

@section('content')
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="title">Notes</div>

                    <ul>
                        @foreach($notes as $note)
                        <li>
                            {{$note->note}}
                        </li>
                        @endforeach
                    </ul>

                    <div class="row text-center">
                        <form method="POST">

                            {!! csrf_field() !!}
                             
                              <div class="form-group">
                                <label for="url">Url</label>
                                <input type="url" class="form-control" id="url">
                              </div>
                              
                             
                              <button type="submit" class="btn btn-default">Submit</button>
                        </form>         
                    </div>

                </div>
            
            </div>
                
        </div>

        @endsection