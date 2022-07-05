<?php

namespace LeonardoTeixeira\Pushover;

use DateTime;
use LeonardoTeixeira\Pushover\Exceptions\InvalidArgumentException;

class Message
{
    private $message;
    private $title;
    private $url;
    private $devices = [];
    private $urlTitle;
    private $priority;
    private $retry;
    private $expire;
    private $callback;
    private $sound;
    private $html;
    private $date;
	private $attachment;

    /**
     * @param $message
     * @param $title
     * @param int  $priority
     */
    public function __construct($message = null, $title = null, int $priority = Priority::NORMAL)
    {
        $this->message = $message;
        $this->title = $title;
        $this->priority = $priority;
    }

    /**
     * @return mixed|null
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed|null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @return mixed
     */
    public function getUrlTitle()
    {
        return $this->urlTitle;
    }

    /**
     * @return array
     */
    public function getDevices(): array
    {
        return $this->devices;
    }

    /**
     * @param array  $devices
     */
    public function setDevices(array $devices)
    {
        $this->devices = $devices;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @return mixed
     */
    public function getRetry()
    {
        return $this->retry;
    }

    /**
     * @return mixed
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * @return mixed
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @return mixed
     */
    public function getSound()
    {
        return $this->sound;
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @return mixed
     */
	public function getAttachment()
	{
		return $this->attachment;
	}

    /**
     * @param $message
     *
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @param $title
     *
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param $url
     *
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param $urlTitle
     *
     * @return void
     */
    public function setUrlTitle($urlTitle)
    {
        $this->urlTitle = $urlTitle;
    }

    /**
     * @param int  $priority
     *
     * @throws \LeonardoTeixeira\Pushover\Exceptions\InvalidArgumentException
     */
    public function setPriority(int $priority)
    {
        if (!Priority::has($priority)) {
          throw new InvalidArgumentException('The priority \'' . $priority . '\' is invalid.');
        }
        $this->priority = $priority;
    }

    /**
     * @param $retry
     *
     * @return void
     */
    public function setRetry($retry)
    {
        $this->retry = $retry;
    }

    /**
     * @param $expire
     *
     * @return void
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;
    }

    /**
     * @param $callback
     *
     * @return void
     */
    public function setCallback($callback)
    {
        $this->callback = $callback;
    }

    /**
     * @throws \LeonardoTeixeira\Pushover\Exceptions\InvalidArgumentException
     */
    public function setSound($sound)
    {
        if (!Sound::has($sound)) {
          throw new InvalidArgumentException('The sound \'' . $sound . '\' is invalid.');
        }
        $this->sound = $sound;
    }

    /**
     * @param $html
     *
     * @return void
     */
    public function setHtml($html)
    {
        if ($html)
            $this->html = 1;
        else
            $this->html = 0;
    }

    /**
     * @param \DateTime  $date
     *
     * @return void
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @param $attachment
     *
     * @return void
     */
    public function setAttachment($attachment)
	{
		$this->attachment = $attachment;
	}

    /**
     * @return bool
     */
    public function hasTitle(): bool
    {
        return !is_null($this->title);
    }

    /**
     * @return bool
     */
    public function hasUrl(): bool
    {
        return !is_null($this->url);
    }

    /**
     * @return bool
     */
    public function hasDefinedSpecificDevices(): bool
    {
        return !empty($this->devices);
    }

    /**
     * @return bool
     */
    public function hasUrlTitle(): bool
    {
        return !is_null($this->urlTitle);
    }

    /**
     * @return bool
     */
    public function hasRetry(): bool
    {
        return !is_null($this->retry);
    }

    /**
     * @return bool
     */
    public function hasExpire(): bool
    {
        return !is_null($this->expire);
    }

    /**
     * @return bool
     */
    public function hasCallback(): bool
    {
        return !is_null($this->callback);
    }

    /**
     * @return bool
     */
    public function hasSound(): bool
    {
        return !is_null($this->sound);
    }

    /**
     * @return bool
     */
    public function hasHtml(): bool
    {
        return !is_null($this->html);
    }

    /**
     * @return bool
     */
    public function hasDate(): bool
    {
        return ($this->date instanceof DateTime);
    }

    /**
     * @return bool
     */
    public function hasAttachment(): bool
    {
		return file_exists($this->attachment);
	}
}
