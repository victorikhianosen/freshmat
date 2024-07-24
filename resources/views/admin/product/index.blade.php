@extends('admin.layout.app')

@section('dashboard_content')
    <main>

        <div class="dashboard_content">
            <h2 class="dashboard_title">Product</h2>
            <div class="dashboard_order">
                <div class="table-responsive">
                    <table>
                        <tbody>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($products as $item)
                                <tr>
                                    <td>
                                        <img src="/assets/images/team_img_1.png" alt="Reviewer" class="img-fluid w-35">
                                    </td>
                                    <td class="">{{ $item->name }}</td>
                                    <td>${{ $item->amount }}</td>
                                    {{-- <td>{{ $item->category }}</td> --}}
                                    <td>{{ $item->category->name }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                {{-- <a href="">
                                                    <span class="active w-170">Edit</span>
                                                </a> --}}

                                                <a href="javascript:void(0);"
                                                    onclick="openEditPopup({{ $item->id }}, '{{ $item->name }}' , '{{ $item->amount }}')">
                                                    <span class="active w-170">Edit</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{ route('admin.product.destroy', $item->id) }}">
                                                    <span class="cancel w-140">Delete</span>
                                                </a>
                                            </div>
                                        </div>
                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            {{ $products->links() }}
        </div>
    </main>




    <!-- Popup Form -->
    <div id="editPopup" class="popup-overlay">
        <div class="popup-content-lg">
            <span class="close-btn" onclick="closeEditPopup()">&times;</span>
            <form id="editForm" class="checkout_form" action="" method="POST">
                @csrf
                @method('PUT')
                <h3>Edit Product</h3>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout_input_box">
                            <label>Name</label>
                            <input type="text" id="editName" name="name" placeholder="Name" required
                                value="{{ old('name') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout_input_box">
                            <label>Amount</label>
                            <input type="text" id="editAmount" name="amount" placeholder="Amount" required
                                value="{{ old('amount') }}" />
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="checkout_input_box">
                            <label>Discount</label>
                            <input type="text" id="editName" name="name" placeholder="Name" required
                                value="{{ old('name') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout_input_box">
                            <label>Weight</label>
                            <input type="text" id="editAmount" name="amount" placeholder="Amount" required
                                value="{{ old('amount') }}" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout_input_box">
                            <label>Category</label>
                            <select class="w-100 py-2" name="category_id">
                                <option value="">Select Category</option>
                                @foreach ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="checkout_input_box">
                            <label>Tag</label>
                            <select class="w-100 py-2" name="category_id">
                                <option value="">Select Tag</option>
                                @foreach ($tags as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="checkout_input_box">
                            <label>Description</label>
                            {{-- <input type="text" id="editAmount" name="amount" placeholder="Amount" required
                                value="{{ old('amount') }}" /> --}}
                            <textarea rows="2" placeholder="Description" name="description">{{ old('description') }}</textarea>

                        </div>
                    </div>

                    <div class="col-xl-12">
                        <button type="submit" class="common_btn col-xl-12">Submit</button>
                    </div>
                </div>

                <input type="hidden" id="editItemId" name="id" value="">
            </form>
        </div>
    </div>



    <script>
        function closeEditPopup() {
            document.getElementById('editPopup').style.display = 'none';
        }

        function openEditPopup(id, name) {
            document.getElementById('editPopup').style.display = 'block';
            document.getElementById('editName').value = name;
            document.getElementById('editAmount').value = amount;
            document.getElementById('editItemId').value = id;
            document.getElementById('editForm').action = '{{ route('admin.category.update', ':id') }}'.replace(':id', id);
        }
    </script>
@endsection
