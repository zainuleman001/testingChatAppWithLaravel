<div class="modal-dialog-scrollable">
    <div class="modal-content">
        <div class="msg-head">
            <div class="row">
                <div class="col-8">
                    <div class="d-flex align-items-center">
                        <span class="chat-icon"><img class="img-fluid"
                                src="https://mehedihtml.com/chatbox/assets/img/arroleftt.svg" alt="image title"></span>
                        <div class="flex-shrink-0">
                            <img class="img-fluid" src="https://mehedihtml.com/chatbox/assets/img/user.png"
                                alt="user img">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h3>{{ $user->name }}</h3>
                            <p class="text-lowercase">{{ $user->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <ul class="moreoption">
                        <li class="navbar nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="modal-body" id="chatModal">
            <div class="msg-body" id="msg-body">
                <ul id="msg-ul">
                    @foreach ($messages as $message)
                        <li class="{{ $message->sender_id == $user->id ? 'sender' : 'repaly' }}">
                            <p> {{ $message->message }}</p>
                            <span class="time">{{ $message->updated_at->format('h:i A') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="send-box">
            <form id="send-message-form">
                <input type="hidden" id="userId" value="{{ $user->id }}">
                <input type="text" id="message" class="form-control" aria-label="message…"
                    placeholder="Write message…">

                <button type="button" id="send-message"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Send</button>
            </form>

        </div>
    </div>
</div>

<script>
    $(document).on('click', '#send-message', function() {
        var data = {
            'receiver_id': $('#userId').val(),
            'message': $('#message').val(),
        };
        if (data.message != '') {
            sendMessage(data);
            $("#send-message-form")[0].reset()
        }
    });

</script>
