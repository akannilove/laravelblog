@extends('main')
@section('title', ' | Contact')
@section('content')
        <div class="row">
            <div class="col-sm-12">
                <h1>Contact Me</h1>
                <hr>
                <form>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" id="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Type your message"></textarea>
                    </div>
                    <input type="submit" name="submit" value="Send Message" class="btn btn-success">
                </form>
            </div>
        </div>
    @endsection