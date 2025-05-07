<!-- Contact Us Section -->
<section class="container my-5">
        <h2 class="text-center">Contattaci</h2> <br>
        <form action="{{ route('data.send.email') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="user_name" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="user_name" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="user_email" >
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="user_message" class="form-label">Messaggio</label>
                <textarea class="form-control" name="user_message" rows="4" ></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Invia Messaggio </button>

            </div>
        </form>
    </section>