<?php

$filename = $_FILES[ 'fileUpload' ][ 'name' ];
$target_file = './' . 'sql/' . $filename;

$fpath = './' . 'sql/';
$files = glob( $fpath . '/*' );

foreach ( $files as $file ) {
    if ( is_file( $file ) ) {
        unlink( $file );

    }
}
if ( move_uploaded_file( $_FILES[ 'fileUpload' ][ 'tmp_name' ], $target_file ) ) {
    // echo 'The file ' . htmlspecialchars( basename( $_FILES[ 'file' ][ 'name' ] ) ) . ' has been uploaded.';

    echo json_encode( [
        'type' => 'success',
        'msg' => 'File Uploaded Successfully',
    ] );

} else {
    echo 'Sorry, there was an error uploading your file.';
}
