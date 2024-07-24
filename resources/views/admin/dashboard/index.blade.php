@extends('admin.layout.app')

@section('dashboard_content')
    <div class="dashboard_content">

        <h2 class="dashboard_title">Welcome To Your Profile</h2>

        <div class="dashboard_profile_info">

            <div class="row mt_15">
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="profile_overview_item">
                        <span><i class="fas fa-shopping-basket"></i></span>
                        <h3>106</h3>
                        <p>Order Active</p>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="profile_overview_item">
                        <span><i class="fas fa-box-check"></i></span>
                        <h3>256</h3>
                        <p>Order Completed</p>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 wow fadeInUp">
                    <div class="profile_overview_item">
                        <span><i class="fas fa-clipboard-list-check"></i></span>
                        <h3>395</h3>
                        <p>Total Order </p>
                    </div>
                </div>
            </div>

            <div class="dashboard_profile_info_list mt_25 wow fadeInUp">
                {{-- <h2>Personal Information <a href="dashboard_info_edit.html">Edit</a></h2> --}}
                <h2>Personal Information<a href="javascript:void(0);"
                    onclick="openEditPopup">
                    Edit</h2>



            </a>
                <ul>
                    <li><span>Name:</span>{{ Auth::guard('isadmin')->user()->first_name }} {{ Auth::guard('isadmin')->user()->last_name }}</li>
                    <li><span>Email:</span>{{ $adminDetails = Auth::guard('isadmin')->user()->email }}</li>
                    <li><span>Phone:</span>{{ Auth::guard('isadmin')->user()->phone }}</li>
                    <li><span>City:</span> Washington Dc</li>
                    <li><span>Country:</span> USA</li>
                    <li><span>Address:</span> 441, 4th street, Washington DC, USA</li>
                </ul>
            </div>

        </div>
    </div>


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
