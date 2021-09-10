<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectMaterialsResponseBody;

use AlibabaCloud\Tea\Model;

class liveMaterials extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $liveUrl;
    protected $_name = [
        'appName'    => 'AppName',
        'streamName' => 'StreamName',
        'domainName' => 'DomainName',
        'liveUrl'    => 'LiveUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->liveUrl) {
            $res['LiveUrl'] = $this->liveUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveMaterials
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['LiveUrl'])) {
            $model->liveUrl = $map['LiveUrl'];
        }

        return $model;
    }
}
