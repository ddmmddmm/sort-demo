<?php
final class SortDemo
{
    /**
     * 冒泡排序
     * @param array $arr 需要排序的数组
     * @return array
     * @Author linzishuang
     * @Date 2020/9/8
     */
    public static function bubbling($arr)
    {
        if(!($arr && is_array($arr))){
            return [];
        }

        $count = count($arr);
        // 控制末尾边界(冒泡比较轮数)
        for ($i = 0; $i < $count; $i++) {
            echo "第{$i}轮" . PHP_EOL;
            // 从头开始，末尾边界由$i控制
            for ($j = 1; $j < $count - $i; $j++) {
                echo "[" . $arr[$j - 1] . '和' . $arr[$j] . '比],';
                // 如果前面大于后面，则交换，一轮下来将最大的放到后面
                if ($arr[$j - 1] > $arr[$j]) {
                    $tmp         = $arr[$j - 1];
                    $arr[$j - 1] = $arr[$j];
                    $arr[$j]     = $tmp;
                }
            }
            echo PHP_EOL;
        }
        return $arr;
    }
}


$arr = [12, 1, 2, -2, 312, 0, 11, 12, 3, 4, 6, 88, 66, 666, -900, 300];
print_r(SortDemo::bubbling($arr));

