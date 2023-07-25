<x-app-layout :assets="$assets ?? []">
   <div>
      <?php
         $id = $id ?? null;
      ?>
      @if(isset($id))
      {!! Form::model($data, ['route' => ['blogs.update', $id], 'method' => 'patch' , 'enctype' => 'multipart/form-data']) !!}
      @else
      {!! Form::open(['route' => ['blogs.store'], 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
      @endif
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">{{$id !== null ? 'Update' : 'New' }} Blog Information</h4>
                  </div>
                  <div class="card-action">
                        <a href="{{route('blogs.index')}}" class="btn btn-sm btn-primary" role="button">Back</a>
                  </div>
               </div>
               <div class="card-body">
                  <div class="new-user-info">
                        <div class="row">
                           <div class="form-group col-12">
                              <label class="form-label" for="title">Title:</label>
                              {{ Form::text('title', old('title'), ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Enter Title' ]) }}
                           </div>
                            <div class="form-group col-12">
                                <label class="form-label" for="description">Description:</label>
                                {{ Form::textarea('description', old('description'), ['class' => 'form-control', 'id' => 'description','rows' => '40','cols'=>'20']) }}
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">{{$id !== null ? 'Update' : 'Add' }} Blog</button>
                  </div>
               </div>
            </div>
         </div>
        </div>
        {!! Form::close() !!}
   </div>
</x-app-layout>
