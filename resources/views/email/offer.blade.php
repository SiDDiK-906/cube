@component('mail::message')
# Very hot Offer for You
# 60% discount on Apple Mackboook Pro

তারতারি ১০০০ টাকা বিকাশ কর নইলে বুকিং স্লট ফাঁকা পাবি না.

Wanna see your Mackbook? Visit our Mackbook site. Click the below button to see the details!
@component('mail::button', ['url' => 'http://i.ytimg.com/vi/0vxCFIGCqnI/maxresdefault.jpg', 'color' => 'success'])
View Offer
@endcomponent

{{-- @component('mail::panel')
<h4 style="color: red">this is panel card section</h4>
@endcomponent --}}

{{-- @component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent --}}

Thanks From,<br>
{{ config('app.name') }}
@endcomponent
