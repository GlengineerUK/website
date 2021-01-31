<div class="flex w-full justify-around">
    {{--contact form--}}
    <form action="/contact" method="POST" class="flex flex-col">
        @csrf
        <span class="font-bold text-xl">Send me a message:</span>
        <div class="flex flex-col mt-1 items-start">
            <label for="name">Name</label>
            <input type="text" name="name" class="w-full px-1 py-px rounded  border">
        </div>
        <div class="flex flex-col mt-1 items-start">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Optional" class="w-full px-1 py-px rounded border">
        </div>
        <div class="flex flex-col mt-1 items-start">
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="10" class="px-1 py-px rounded border"></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="mt-2 px-4 bg-blue-500 hover:bg-blue-400 hover:border hover:border-blue-500 border rounded text-blue-100">Send</button>
        </div>
    </form>
    {{--socials--}}
    <div class="flex flex-col">
        <span class="mb-4 font-bold text-xl">Connect:</span>
        <ul class="">
            <li>
                <div class="flex mb-2 items-center">
                    <img src="{{asset('images/social/linkedin-logo.png')}}" alt="linkedin logo" class="h-6 w-6 mr-2">
                    <a href="https://www.linkedin.com/in/glen-clark-67154830/">Glen Clark</a>
                </div>
            </li>
            <li>
                <div class="flex mb-2 items-center">
                    <img src="{{asset('images/social/codewars-logo.png')}}" alt="codewars logo" class="h-6 w-6 mr-2">
                    <a href="https://www.codewars.com/users/gclark18">gclark18</a>
                </div>
            </li>
            <li>
                <div class="flex mb-2 items-center">
                    <img src="{{asset('images/social/laracasts.png')}}" alt="" class="h-6 w-6 mr-2">
                    <a href="https://laracasts.com/@gclark18">gclark18</a>
                </div>
            </li>
            <li>
                <div class="flex mb-2 items-center">
                    <img src="{{asset('images/social/github.png')}}" alt="" class="h-6 w-6 mr-2">
                    <a href="https://github.com/gclark18">gclark18</a>
                </div>
            </li>
        </ul>
    </div>

</div>
