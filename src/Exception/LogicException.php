<?php
namespace Eelly\Exception;

/**
 * 逻辑异常.
 *
 * @author hehui<hehui@eelly.net>
 *
 */
class LogicException extends \LogicException
{
    /**
     *
     * @var array
     */
    private $context;

    /**
     * @param $message [optional]
     * @param $context [optional]
     * @param $code [optional]
     * @param $previous [optional]
     */
    public function __construct ($message = null, array $context = null, $code = null, $previous = null)
    {
        parent::__construct($message, $code, $previous);
        // default context
        if (null === $context) {
            $context = [
                'code' => $this->getCode(),
                'line' => $this->getLine(),
                'file' => $this->getFile(),
            ];
        }
        $this->context = $context;
    }

    /**
     * 获取上下文信息
     *
     * @return array
     */
    public function getContext()
    {
        return $this->context;
    }
}
