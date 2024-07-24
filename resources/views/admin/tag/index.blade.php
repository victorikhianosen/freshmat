@extends('admin.layout.app')

@section('dashboard_content')
    <main>



        <div class="container">
            <div class="row">
                <div class="dashboard_content col-lg-8 col-md-8">
                    <h2 class="dashboard_title">Tag</h2>
                    <div class="dashboard_order">
                        <div class="table-responsive">
                            <table>
                                <tbody>
                                    <tr>
                                        {{-- <th>ID</th> --}}
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>

                                    @foreach ($tags as $item)
                                        <tr>
                                            {{-- <td>{{ $item->id }}</td> --}}
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <a href="javascript:void(0);"
                                                            onclick="openEditPopup({{ $item->id }}, '{{ $item->name }}')">
                                                            <span class="active w-170">Edit</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <a href="{{ route('admin.tag.delete', $item->id) }}">
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
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="cart_sidebar" id="sticky_sidebar">
                        <h3>Add Tag</h3>
                        <form action="{{ route('admin.tag.store') }}" method="POST">
                            @csrf
                            <div class="cart_sidebar_info">
                                <div class="col-lg-12 pb-4">
                                    <div class="checkout_input_box">
                                        <label>Tag Name</label>
                                        <input type="text" name="name" placeholder="hot">
                                    </div>
                                </div>
                                <button type="submit" class="common_btn">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- Popup Form -->
        <div id="editPopup" class="popup-overlay">
            <div class="popup-content">
                <span class="close-btn" onclick="closeEditPopup()">&times;</span>
                <form id="editForm" class="checkout_form" action="" method="POST">
                    @csrf
                    @method('PUT')
                    <h3>Edit Tag</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="checkout_input_box">
                                <label>Name</label>
                                <input type="text" id="editName" name="name" placeholder="Name" required
                                    value="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <button type="submit" class="common_btn">Submit</button>
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
                document.getElementById('editItemId').value = id;
                document.getElementById('editForm').action = '{{ route('admin.tag.update', ':id') }}'.replace(':id', id);
            }
        </script>

    </main>
@endsection
