@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Member</h2>
    <form action="{{ route('members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $member->name }}" required>
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="text" class="form-control" id="number" name="number" value="{{ $member->number }}">
        </div>
        <div class="form-group">
            <label for="village">Village</label>
            <input type="text" class="form-control" id="village" name="village" value="{{ $member->village }}" required>
        </div>
        <div class="form-group">
            <label for="group">Group</label>
            <input type="text" class="form-control" id="group" name="group" value="{{ $member->group }}" required>
        </div>
        <div class="form-group">
            <label for="caste">Caste</label>
            <input type="text" class="form-control" id="caste" name="caste" value="{{ $member->caste }}" required>
        </div>
        <div class="form-group">
            <label for="member_type">Member Type</label>
            <select class="form-control" id="member_type" name="member_type" required>
                <option value="President" {{ $member->member_type == 'President' ? 'selected' : '' }}>President</option>
                <option value="Secretary" {{ $member->member_type == 'Secretary' ? 'selected' : '' }}>Secretary</option>
                <option value="Member" {{ $member->member_type == 'Member' ? 'selected' : '' }}>Member</option>
            </select>
        </div>
        @if(Auth::user()->is_admin)
        <div class="form-group">
            <label for="share_price">Share Price</label>
            <input type="number" class="form-control" id="share_price" name="share_price" value="{{ $member->share_price }}" required>
        </div>
        @endif
        <button type="submit" class="btn btn-primary">Update Member</button>
    </form>
</div>
@endsection
