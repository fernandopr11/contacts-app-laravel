@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Contact Information</div>
          <div class="card-body text-center">
            <div>
              <img src="{{ Storage::url($contact->profile_picture) }}" alt="image-{{ $contact->name }}"
                class="profile-picture">
            </div>
            <p>Name: {{ $contact->name }}</p>
            <p>Email: <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
            <p>Phone number: <a href="tel:{{ $contact->phone_number }}">{{ $contact->phone_number }}</a></p>
            <p>Age: {{ $contact->age }}</p>
            <p>Created at: {{ $contact->created_at }}</p>
            <p>Update at: {{ $contact->updated_at }}</p>
          </div>
          <div class="d-flex justify-content-center">
            <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary mb-2">Edit Contact</a>
            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger mb-2">Delete Contact</button>
            </form>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection
