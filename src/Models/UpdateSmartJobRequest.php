<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateSmartJobRequest extends Model
{
    /**
     * @var string
     */
    public $FEExtend;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'FEExtend' => 'FEExtend',
        'jobId'    => 'JobId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FEExtend) {
            $res['FEExtend'] = $this->FEExtend;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSmartJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FEExtend'])) {
            $model->FEExtend = $map['FEExtend'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
