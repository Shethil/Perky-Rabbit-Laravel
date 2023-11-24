@extends('inc.master')

@section('title')
    Employee Create
@endsection

@section('content')
    <h1>Create Employee</h1>

    <form action="{{ route('employee.store') }}" method="post">
        @csrf

        <!-- Employee Details -->
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email"
                value="{{ old('email') }}" required>
            @error('eamil')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control  @error('phone') is-invalid @enderror" id="phone" name="phone"
                value="{{ old('phone') }}" required>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control  @error('address') is-invalid @enderror" id="address" name="address"
                value="{{ old('address') }}" required>
            @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Department -->
        <div class="form-group">
            <label for="department_id">Department</label>
            <select class="form-control  @error('department_id') is-invalid @enderror" id="department_id"
                name="department_id" required>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
            </select>
            @error('department_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Achievements (Assuming a multiple select for achievements) -->
        <div class="form-group">
            <label for="achievement_ids">Achievements</label>
            <select class="form-control" id="achievement_ids" name="achievement_ids[]" multiple>
                @foreach ($achievements as $achievement)
                    <option value="{{ $achievement->id }}">{{ $achievement->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Employee</button>
    </form>
@endsection
