<?php

namespace App\Services;


use App\Tree\TreeNode;

class TreeServices extends Service
{


    /**
     * @param $pre
     * @param $vin
     * @return null
     *  递归重建二叉树
     */

    //前序遍历：根->左->右
    //中序遍历：左->根->右
    public function reConstructBinaryTree($pre, $vin)
    {
        if (!$pre || !$vin) {
            return null;
        }

        $root = new TreeNode($pre[0]);
        $index = array_search($pre[0], $vin); // 根节点在中序数组的位置

        $root->left = self::reConstructBinaryTree(array_slice($pre, 1, $index), array_slice($vin, 0, $index));
        $root->right = self::reConstructBinaryTree(array_slice($pre, $index + 1), array_slice($vin, $index + 1));

        return $root;


    }


    /**
     * @param $treeChild
     * @param $treeParent
     * @return bool
     * 判断是否为二叉树子结构
     */
    public function hasSubtree($treeChild, $treeParent)
    {

        return ($treeChild != null) && ($treeParent != null)
            && ($this->isSubtree($treeChild, $treeParent)          // 根节点是否相等
                || $this->HasSubtree($treeChild->left, $treeParent)    // 是否有左节点
                || $this->HasSubtree($treeChild->right, $treeParent)   // 是否有右节点
            );
    }

    public function isSubtree($treeChild, $treeParent)
    {
        if ($treeParent == null) {
            return true;
        }

        if ($treeChild == null) {
            return false;
        }

        return $treeChild->val == $treeParent->val
            && $this->isSubtree($treeChild->left, $treeParent->left)
            && $this->isSubtree($treeChild->right, $treeParent->right);
    }


    /**
     * @param $tree
     * @return false
     * 操作给定的二叉树，将其变换为源二叉树的镜像
     */
    public function mirror($tree)
    {

        if ($tree == null) {
            return false;
        }

        $LEFT = $RIGHT = null;

        if ($tree->left) {
            $LEFT = $this->mirror($tree->left);
        }

        if ($tree->right) {
            $LEFT = $this->mirror($tree->right);
        }

        $tree->left = $RIGHT;
        $tree->right = $LEFT;

        return $tree;

    }


    public function verifySquenceOfBst($tree)
    {
        $length = count($tree);

        if ($length == 0) {
            return false;
        }
        $root = end($tree);

        //找出左右子树
        for ($v = 0; $v < $length - 1; $v++) {
            if ($tree[$v] > $root) {
                break;
            }
        }
        //确认右子树都大于根节点
        for ($i = $v + 1; $i < $length - 1; $i++) {
            if ($tree[$i] < $root) {
                return false;
            }
        }
        $left = $right = true;
        //二叉查找树可能缺少左右子树
        if ($v > 0) {
            $left = $this->verifySquenceOfBst(array_slice($tree, 0, $v));
        }
        if ($i < $length) {
            $right = $this->verifySquenceOfBst(array_slice($tree, $v, $length - $v - 1));
        }

        return $left && $right;
    }
}
