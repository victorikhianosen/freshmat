@extends('admin.layout.app')

@section('dashboard_content')
    <main>

        <style>
            .image-preview {
                max-width: 100px;
                margin-right: 10px;
            }
        </style>

        <section class="checkout pt_10 xs_pt_75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 wow fadeInUp">


                        <form class="checkout_form" action="{{ route('admin.product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <h3>Add Product</h3>
                            <div class="row">

                                <!-- Product Name -->
                                <div class="col-lg-6">
                                    <div class="checkout_input_box">
                                        <label>Product Name</label>
                                        <input type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Amount -->
                                <div class="col-lg-6">
                                    <div class="checkout_input_box">
                                        <label>Amount</label>
                                        <input type="number" placeholder="Amount" name="amount"
                                            value="{{ old('amount') }}">
                                        @error('amount')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Discount -->
                                <div class="col-lg-6">
                                    <div class="checkout_input_box">
                                        <label>Discount</label>
                                        <input type="number" placeholder="1 - 100%" name="discount" min="1"
                                            max="100" value="{{ old('discount') }}">
                                        @error('discount')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Weight -->
                                <div class="col-lg-6">
                                    <div class="checkout_input_box">
                                        <label>Weight / Kilo</label>
                                        <input type="number" placeholder="Weight / Kilo" name="weight"
                                            value="{{ old('weight') }}">
                                        @error('weight')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="col-lg-6">
                                    <div class="checkout_input_box">
                                        <label>Category</label>
                                        <select class="w-100 py-2" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Tags -->
                                <div class="col-lg-6">
                                    <div class="checkout_input_box">
                                        <label>Tags</label>
                                        <select class="w-100 py-2" name="tag_id">
                                            <option value="">Select Tag</option>
                                            @foreach ($tags as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('tag_id')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="col-xl-12">
                                    <div class="checkout_input_box">
                                        <label>Description</label>
                                        <textarea rows="5" placeholder="Description" name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <span style="color: red; font-size: x-small;">{{ $message }}</span>
                                        @enderror
                                        @if (session('error'))
                                            <span style="color: red; font-size: x-small;">{{ session('error') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-xl-12">
                                    <button type="submit" class="common_btn w-100">Add</button>
                                </div>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </section>
    </main>

    <script>
        function setupFileInput(inputId, previewId) {
            const fileInput = document.getElementById(inputId);
            const previewContainer = document.getElementById(previewId);

            fileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                previewContainer.innerHTML = ''; // Clear previous previews

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.classList.add('image-preview');
                        previewContainer.appendChild(img);
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            setupFileInput('photo_one', 'preview_one');
            setupFileInput('photo_two', 'preview_two');
            setupFileInput('photo_three', 'preview_three');
            setupFileInput('photo_four', 'preview_four');
        });
    </script>
@endsection
