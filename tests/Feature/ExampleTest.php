<?php
#trivial change to test CI
it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
