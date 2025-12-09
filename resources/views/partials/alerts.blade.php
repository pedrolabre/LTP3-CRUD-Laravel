@if(session('success'))
<div style="max-width: 1200px; margin: 0 auto 20px auto; padding: 0 20px;">
    <x-alert type="success" :message="session('success')" />
</div>
@endif

@if(session('error'))
<div style="max-width: 1200px; margin: 0 auto 20px auto; padding: 0 20px;">
    <x-alert type="error" :message="session('error')" />
</div>
@endif
