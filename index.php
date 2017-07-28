<php>
	#cURL Must enabled
	function mining($wallet){
		$handle=curl_init('http://mining.cayafuture.com:2435/'.$wallet);
		curl_setopt($handle, CURLOPT_VERBOSE, true);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_POSTFIELDS, "");
		$content = curl_exec($handle);	
		curl_close($handle);
		return $content;
	}
	$wallet = "cy_84011d733c248120a2acd656a718eef33955e789798c046d7ab6e5f25db78496";
	$data = mining($wallet);
	print_r($data);

</php>
