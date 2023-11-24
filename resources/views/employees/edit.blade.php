@extends('inc.master')

@section('title')
    Employee Edit
@endsection

@section('content')
    <div class="container">
        <h1>Edit Employee</h1>

        <form action="{{ route('employee.update', $employee->id) }}" method="post">
            @csrf
            @method('PUT')

            <!-- Employee Details -->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $employee->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email', $employee->email) }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                    name="phone" value="{{ old('phone', $employee->phone) }}" required>
                @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                    name="address" value="{{ old('address', $employee->address) }}" required>
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Department -->
            <div class="form-group">
                <label for="department_id">Department</label>
                <select class="form-control @error('department_id') is-invalid @enderror" id="department_id"
                    name="department_id" required>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}"
                            {{ $employee->department_id == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
                @error('department_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Achievements -->
            <div class="form-group">
                <label for="achievement_ids">Achievements</label>
                <select class="form-control" id="achievement_ids" name="achievement_ids[]" multiple>
                    @foreach ($achievements as $achievement)
                        <option value="{{ $achievement->id }}"
                            {{ in_array($achievement->id, $employee->achievements->pluck('id')->toArray()) ? 'selected' : '' }}>
                            {{ $achievement->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>
@endsection
