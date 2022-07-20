<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class RegisterMediaInfoRequest extends Model
{
    /**
     * @description 媒资业务类型
     *
     * @var string
     */
    public $businessType;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @description 客户端token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 封面图，仅视频媒资有效
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 媒资媒体url
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description 标签,如果有多个标签用逗号隔开
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description 媒资媒体类型
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description 是否覆盖已有媒资
     *
     * @var bool
     */
    public $overwrite;

    /**
     * @description 注册媒资的配置
     *
     * @var string
     */
    public $registerConfig;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 用户数据，最大1024字节
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'businessType'   => 'BusinessType',
        'cateId'         => 'CateId',
        'clientToken'    => 'ClientToken',
        'coverURL'       => 'CoverURL',
        'description'    => 'Description',
        'inputURL'       => 'InputURL',
        'mediaTags'      => 'MediaTags',
        'mediaType'      => 'MediaType',
        'overwrite'      => 'Overwrite',
        'registerConfig' => 'RegisterConfig',
        'title'          => 'Title',
        'userData'       => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }
        if (null !== $this->registerConfig) {
            $res['RegisterConfig'] = $this->registerConfig;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }
        if (isset($map['RegisterConfig'])) {
            $model->registerConfig = $map['RegisterConfig'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
