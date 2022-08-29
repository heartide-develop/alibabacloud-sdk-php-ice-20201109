<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class DeleteEditingProjectMaterialsRequest extends Model
{
    /**
     * @var string
     */
    public $materialIds;

    /**
     * @var string
     */
    public $materialType;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'materialIds'  => 'MaterialIds',
        'materialType' => 'MaterialType',
        'projectId'    => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialIds) {
            $res['MaterialIds'] = $this->materialIds;
        }
        if (null !== $this->materialType) {
            $res['MaterialType'] = $this->materialType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEditingProjectMaterialsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialIds'])) {
            $model->materialIds = $map['MaterialIds'];
        }
        if (isset($map['MaterialType'])) {
            $model->materialType = $map['MaterialType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
