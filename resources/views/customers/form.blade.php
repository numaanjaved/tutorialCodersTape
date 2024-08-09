@csrf
            <label for="name">Name: </label>
            <div class=formt-group">
                <input type="text" name="name" value="{{old('name') ?? $customer->name}}" class="form-control">
            </div>
            <div>{{$errors->first('name')}}</div>

            <label for="email">Email: </label>
            <div class="form-group">
                <input type="text" name="email" value="{{old('email') ?? $customer->email}}" class="form-control">
            </div>
            <div>{{$errors->first('email')}}</div>
            <label for="company_id">Company</label>
            <div class="form-group">
                <select name="company_id" id="company" class="form-control">
                    <option value="" disabled>Select</option>
                    @foreach($companies as $company)
                        <option value="{{$company->id}}" {{$customer->company_id == $company->id ? 'selected' : '' }}>{{$company->name}} ({{$company->contact}})</option>
                    @endforeach
                </select>
            </div>
            <label for="active">Status</label>
            <div class="form-group">
                <select name="active" id="active" class="form-control">
                    <option value="" disabled>Select</option>
                    @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
                        <option value="{{$activeOptionKey}}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{$activeOptionValue}}</option>
                    @endforeach
                </select>
            </div>
            <hr>
            