<div class={{ $class ?? "my-3" }}>
    <label for={{ $id }}>{{ $label }}</label>
    <input type={{ $type ?? "text"}} name={{ $name ?? $id }} id={{ $id }} class={{ $inputClass ?? "form-control my-3" }}>
</div>