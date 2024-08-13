<form action="{{route('contacts.store')}}" method="POST">
            @csrf
            <label for="name">Name: </label>
            <div class="form-group">
                <input type="text" name="name" value="{{old('name')}}" class="form-control">
            </div>
            <div>{{$errors->first('name')}}</div>

            <label for="email">Email: </label>
            <div class="form-group">
                <input type="text" name="email" value="{{old('email')}}" class="form-control">
            </div>
            <div>{{$errors->first('email')}}</div>
            <label for="message">Message</label>
            <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="6" class="form-control">{{old('message')}}</textarea>
            </div>
            <div>{{$errors->first('message')}}</div>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Send Email</button>
            </div>

        </form>
