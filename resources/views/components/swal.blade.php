{{-- resources/views/components/swal.blade.php --}}
@props(['icon' => 'success', 'title' => ''])

<script type="module">
    document.addEventListener('DOMContentLoaded', () => {
        const Toast = Swal.mixin({
            confirmButtonColor: '#16484B', // Your brand green
            background: '#ffffff',
            customClass: {
                popup: 'rounded-xl border border-slate-200',
                confirmButton: 'px-6 py-2 rounded-md font-bold text-[#E2C065]'
            }
        });

       
        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: 'Check your details',
                html: `
                    <div class="text-left text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <p>• {{ $error }}</p>
                        @endforeach
                    </div>
                `,
                confirmButtonColor: '#16484B',
            });
        @endif

        
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                confirmButtonColor: '#16484B',
            });
        @endif

        
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
                confirmButtonColor: '#16484B',
            });
        @endif
    });
</script>