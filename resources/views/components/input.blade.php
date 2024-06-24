<div class="form-group">
    <label for="{{$name}}">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" value="{{old($name)}}"
    class="form-control" id="{{$name}}" aria-describedby="emailHelp" placeholder="{{$label}}">
    <span class="text-danger">
        @error("{{'name'}}")
            {{$message}}
        @enderror
        {{$demo}}
    </span>
  </div>