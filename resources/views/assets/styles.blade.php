<link rel="stylesheet" href="{{ config('livewire-powergrid.plugins.flat_piker.css') }}">
@if(config('livewire-powergrid.theme') === 'bootstrap')
<link rel="stylesheet"
      href="{{ config('livewire-powergrid.plugins.bootstrap-select.css') }}"
      crossorigin="anonymous"/>
@endif
<style>
    table{width:100%}.table .checkbox-column{width:50px!important;max-width:50px!important;text-align:center}.form-control:disabled,.form-control[readonly]{opacity:1;background-color:#f8f9fa;border-color:#f8f9fa}.accordion-button{padding:.7rem .7rem}.btn-light,.has-search .form-control{padding-left:2.375rem}.has-search .form-control-feedback{position:absolute;z-index:2;display:block;width:2.375rem;height:2.375rem;line-height:2.375rem;text-align:center;pointer-events:none;color:#aaa}.new-control{position:relative;display:-ms-inline-flexbox;display:inline-flex;padding-left:1.5rem;margin-right:1rem;font-weight:100;font-size:14px}.page-link{@apply block bg-white text-blue-800 border-r border-gray-200 outline-none py-2 w-12 text-sm text-center;}.page-link:last-child{@apply border-0;}.page-link:hover{@apply bg-blue-700 text-white border-blue-700;}.page-item.active .page-link{@apply bg-blue-700 text-white border-blue-700;}.page-item.disabled .page-link{@apply bg-white text-gray-300 border-gray-200;}.livewire-powergrid{    background-color: rgba(229, 231, 235,1);border-color: rgba(243, 244, 246,1);color: rgba(55, 65, 81,1);border-radius: 4px;}.page-link{color:gray!important}.page-item.active .page-link{color:#fff!important;background-color:gray;border-color:gray}.loader{border-top-color:#222;-webkit-animation:spinner 1.5s linear infinite;animation:spinner 1.5s linear infinite}@-webkit-keyframes spinner{0%{-webkit-transform:rotate(0)}100%{-webkit-transform:rotate(360deg)}}@keyframes spinner{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}.form-check-input:checked {background-color: #198754;border-color: #198754;}
</style>

