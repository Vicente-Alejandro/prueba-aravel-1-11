@foreach ($scripts ?? [] as $script)<script src="{{ asset("js/$script.js") }}"></script></script>@endforeach