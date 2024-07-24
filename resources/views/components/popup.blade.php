<!-- Popup Form -->
<div id="{{ $popupId }}" class="popup-overlay" style="display: none;">
    <div class="popup-content">
        <span class="close-btn" onclick="closeEditPopup('{{ $popupId }}')">&times;</span>
        <form id="{{ $formId }}" class="checkout_form" action="{{ $formAction }}" method="POST">
            @csrf
            @method($method)
            <h3>{{ $popupTitle }}</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout_input_box">
                        <label>{{ $inputLabel }} *</label>
                        <input type="text" id="{{ $inputId }}" name="{{ $inputName }}" placeholder="{{ $inputPlaceholder }}" required value="" />
                    </div>
                </div>
                <div class="col-xl-12">
                    <button type="submit" class="common_btn">Submit</button>
                </div>
            </div>
            <input type="hidden" id="{{ $hiddenId }}" name="id" value="">
        </form>
    </div>
</div>

<script>
    function closeEditPopup(popupId) {
        document.getElementById(popupId).style.display = 'none';
    }

    function openEditPopup(popupId, formId, id, name, formAction) {
        document.getElementById(popupId).style.display = 'block';
        document.getElementById(formId).action = formAction.replace(':id', id);
        document.getElementById('{{ $inputId }}').value = name;
        document.getElementById('{{ $hiddenId }}').value = id;
    }
</script>
