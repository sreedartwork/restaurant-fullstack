{{-- @extends('layouts.app')

@section('title')
{{$foodItem}} - {{$settings["general"]->site_title}} 
@endsection

@section('content')
    <div id="single-menu-page">
      <div class="row">
        <div class="col-sm-12
        offset-md-1 col-md-10
        offset-lg-2 col-lg-8">
          <div class="content-box">
            <div class="row">
              <div class="col-md-12">
                <h1>{{$foodItem}}</h1>
              </div>
              @foreach ($foodItems as $item)
                <div class="col-md-6">
                  <div class="item">
                    <div class="title">
                      <h4>{{$item->title}}</h4>
                      <span class="price">${{$item->price}}</span>
              <div class="form-group">
                  <label for="guestsinput">Size</label>
                  <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestsinput">
                    <option value="1">{{$item->size}}  <span class="price">${{$item->price}}</span></option>
                    <option value="2">{{$item->size}} <span class="price">${{$item->price}}</span></option>
                    <option value="3">{{$item->size}} <span class="price">${{$item->price}}</span></option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                   <div class="form-group">
                  <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                </div>
                  @error('guests_total')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                    </div>
                    <div class="description">
                      <p>{{$item->description}}</p>
                    </div>
                  </div>
                </div>
              @endforeach
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection --}}


{{-- new code --}}

@extends('layouts.app')
@section('title')
{{$foodItem}} - {{$settings["general"]->site_title}} 
@endsection
@section('content')
    <div id="single-menu-page">
        <div class="row">
            <div class="col-sm-12 offset-md-1 col-md-10 offset-lg-2 col-md-8">
                <div class="content-box">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>{{$foodItem}}</h1>
                        </div>
                        @foreach ( $foodItems as $item )
                            
                        <div class="col-md-6">
                            <div class="item">
                                <div class="title">
                                        <h4>{{$item->title}}</h4> <br/>
                                        {{-- <h4>{{$item->size}}</h4> <br/> --}}
                                        <span class="price">
                                            ${{$item->price}}
                                        </span> 
                                </div>
                                <div class="description">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection