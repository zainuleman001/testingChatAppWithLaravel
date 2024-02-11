<div class="modal-dialog-scrollable">
    <div class="modal-content">
        <div class="chat-header">
            <input type="text" class="form-control w-100 my-3" id="inlineFormInputGroup" placeholder="Search"
                aria-label="search">
            {{--
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="Open-tab"
                        data-bs-toggle="tab" data-bs-target="#Open"
                        type="button" role="tab" aria-controls="Open"
                        aria-selected="true">Open</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="Closed-tab"
                        data-bs-toggle="tab" data-bs-target="#Closed"
                        type="button" role="tab" aria-controls="Closed"
                        aria-selected="false">Closed</button>
                </li>
            </ul> --}}
        </div>

        <div class="modal-body">
            <!-- chat-list -->
            <div class="chat-lists">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Open" role="tabpanel" aria-labelledby="Open-tab">
                        <!-- chat-list -->
                        <div class="chat-list">
                            @foreach ($users as $user)
                                <a class="d-flex align-items-center uniqueUser" style="cursor: pointer"
                                    data-user-id="{{ $user->id }}">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                            alt="user img">
                                        <span class="active"></span>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h3>{{ $user->name }}</h3>
                                        <p class="text-lowercase">{{ $user->email }}</p>
                                    </div>
                                </a>
                            @endforeach


                        </div>
                        <!-- chat-list -->
                    </div>
                    {{-- <div class="tab-pane fade" id="Closed" role="tabpanel"
                        aria-labelledby="Closed-tab">

                        <!-- chat-list -->
                        <div class="chat-list">
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                    <span class="active"></span>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Mehedi Hasan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Ryhan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Malek Hasan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Sadik Hasan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Bulu </h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Maria SK</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Dipa Hasan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Jhon Hasan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Tumpa Moni</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Payel Akter</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Baby Akter</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Zuwel Rana</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Habib </h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Jalal Ahmed</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Hasan Ali</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>
                            <a href="#"
                                class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img class="img-fluid"
                                        src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                        alt="user img">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3>Mehedi Hasan</h3>
                                    <p>front end developer</p>
                                </div>
                            </a>

                        </div>
                        <!-- chat-list -->
                    </div> --}}
                </div>

            </div>
            <!-- chat-list -->
        </div>
    </div>
</div>
<script>
    $(document).on('click', '.uniqueUser', function() {
        selectedUserId = $(this).data('user-id');
        appendUserMessagesComponent(selectedUserId);
    });
    $(document).ready(function () {
        $('.uniqueUser:first').click();
    });


</script>
