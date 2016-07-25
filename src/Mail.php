<?php

namespace Luba;

class Mail
{
	protected $to;

	protected $from;

	protected $subject;

	protected $content;

	public function __construct($to = NULL, $from = NULL, $subject = NULL, $content = NULL)
	{
		$this->to = $to;
		$this->from = $from;
		$this->subject = $subject;
		$this->content = $content;
	}

	public function to($receipient)
	{
		$this->to = $receipient;
	}

	public function from($sender)
	{
		$this->from = $sender;
	}

	public function subject($subject)
	{
		$this->subject = $subject;
	}

	public function content($content)
	{
		$this->content = $content;
	}

	public function send()
	{
		$sent = mail($this->to, $this->subject, $this->content, "From: {$this->from}");

		if ($sent)
			return true;
		else
			return false;
	}
}