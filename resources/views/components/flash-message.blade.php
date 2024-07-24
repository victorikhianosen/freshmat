@props(['message', 'type' => 'success'])

@if ($message)
    <div id="flash-message" class="animate-slideIn">
        <div id="flash-content" data-type="{{ $type }}" style="color: white !important;">
            <span class="text-xs">{{ $message }}</span>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var flashMessage = document.getElementById('flash-message');
            var flashContent = document.getElementById('flash-content');

            setTimeout(function () {
                flashContent.classList.remove('animate-slideIn');
                flashContent.classList.add('animate-slideOut');
                setTimeout(function () {
                    flashMessage.classList.add('hidden');
                }, 500); // Duration of the slide-out animation
            }, 3000); // Time before the message starts to slide out
        });
    </script>
@endif


