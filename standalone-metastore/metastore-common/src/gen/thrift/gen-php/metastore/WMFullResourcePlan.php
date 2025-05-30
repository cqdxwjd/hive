<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.16.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class WMFullResourcePlan
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'plan',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\metastore\WMResourcePlan',
        ),
        2 => array(
            'var' => 'pools',
            'isRequired' => true,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMPool',
                ),
        ),
        3 => array(
            'var' => 'mappings',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMMapping',
                ),
        ),
        4 => array(
            'var' => 'triggers',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMTrigger',
                ),
        ),
        5 => array(
            'var' => 'poolTriggers',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\metastore\WMPoolTrigger',
                ),
        ),
    );

    /**
     * @var \metastore\WMResourcePlan
     */
    public $plan = null;
    /**
     * @var \metastore\WMPool[]
     */
    public $pools = null;
    /**
     * @var \metastore\WMMapping[]
     */
    public $mappings = null;
    /**
     * @var \metastore\WMTrigger[]
     */
    public $triggers = null;
    /**
     * @var \metastore\WMPoolTrigger[]
     */
    public $poolTriggers = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['plan'])) {
                $this->plan = $vals['plan'];
            }
            if (isset($vals['pools'])) {
                $this->pools = $vals['pools'];
            }
            if (isset($vals['mappings'])) {
                $this->mappings = $vals['mappings'];
            }
            if (isset($vals['triggers'])) {
                $this->triggers = $vals['triggers'];
            }
            if (isset($vals['poolTriggers'])) {
                $this->poolTriggers = $vals['poolTriggers'];
            }
        }
    }

    public function getName()
    {
        return 'WMFullResourcePlan';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->plan = new \metastore\WMResourcePlan();
                        $xfer += $this->plan->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->pools = array();
                        $_size1120 = 0;
                        $_etype1123 = 0;
                        $xfer += $input->readListBegin($_etype1123, $_size1120);
                        for ($_i1124 = 0; $_i1124 < $_size1120; ++$_i1124) {
                            $elem1125 = null;
                            $elem1125 = new \metastore\WMPool();
                            $xfer += $elem1125->read($input);
                            $this->pools []= $elem1125;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::LST) {
                        $this->mappings = array();
                        $_size1126 = 0;
                        $_etype1129 = 0;
                        $xfer += $input->readListBegin($_etype1129, $_size1126);
                        for ($_i1130 = 0; $_i1130 < $_size1126; ++$_i1130) {
                            $elem1131 = null;
                            $elem1131 = new \metastore\WMMapping();
                            $xfer += $elem1131->read($input);
                            $this->mappings []= $elem1131;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::LST) {
                        $this->triggers = array();
                        $_size1132 = 0;
                        $_etype1135 = 0;
                        $xfer += $input->readListBegin($_etype1135, $_size1132);
                        for ($_i1136 = 0; $_i1136 < $_size1132; ++$_i1136) {
                            $elem1137 = null;
                            $elem1137 = new \metastore\WMTrigger();
                            $xfer += $elem1137->read($input);
                            $this->triggers []= $elem1137;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::LST) {
                        $this->poolTriggers = array();
                        $_size1138 = 0;
                        $_etype1141 = 0;
                        $xfer += $input->readListBegin($_etype1141, $_size1138);
                        for ($_i1142 = 0; $_i1142 < $_size1138; ++$_i1142) {
                            $elem1143 = null;
                            $elem1143 = new \metastore\WMPoolTrigger();
                            $xfer += $elem1143->read($input);
                            $this->poolTriggers []= $elem1143;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('WMFullResourcePlan');
        if ($this->plan !== null) {
            if (!is_object($this->plan)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('plan', TType::STRUCT, 1);
            $xfer += $this->plan->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->pools !== null) {
            if (!is_array($this->pools)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('pools', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->pools));
            foreach ($this->pools as $iter1144) {
                $xfer += $iter1144->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->mappings !== null) {
            if (!is_array($this->mappings)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('mappings', TType::LST, 3);
            $output->writeListBegin(TType::STRUCT, count($this->mappings));
            foreach ($this->mappings as $iter1145) {
                $xfer += $iter1145->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->triggers !== null) {
            if (!is_array($this->triggers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('triggers', TType::LST, 4);
            $output->writeListBegin(TType::STRUCT, count($this->triggers));
            foreach ($this->triggers as $iter1146) {
                $xfer += $iter1146->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->poolTriggers !== null) {
            if (!is_array($this->poolTriggers)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('poolTriggers', TType::LST, 5);
            $output->writeListBegin(TType::STRUCT, count($this->poolTriggers));
            foreach ($this->poolTriggers as $iter1147) {
                $xfer += $iter1147->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
