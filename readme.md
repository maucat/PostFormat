﻿<h3>PostFormat 文章形式</h3>
<ul>
<li>当前版本: 1.0.0<br /></li>
<li>更新时间: 2012.7.7</li>
</ul>
<h3>使用方法</h3>
<ol>
<li>解压文件, 将插件复制到<code>build/usr/plugins/</code>文件夹下, 然后激活;</li>
<li>本插件提供了6种文章形式:<code>标准</code>, <code>短语</code>, <code>视频</code>, <code>音频</code>, <code>图像</code>, <code>链接</code>;</li>
</ol>
<h3>设置选项</h3>
<div class="highlight">
     <div class="source" style="font-family: 'Courier New', Consolas, 'Lucida Console'; color: rgb(0, 0, 0); background-color: rgb(255, 255, 255); "><span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 170); ">while</span>(<span style="color: rgb(170, 0, 0); ">$this</span><span style="color: rgb(0, 0, 0); ">-&gt;</span><span style="color: rgb(30, 144, 255); ">next</span>())<span style="color: rgb(0, 0, 0); ">:</span> <span style="color: rgb(170, 0, 0); ">$format</span> <span style="color: rgb(0, 0, 0); ">=</span> <span style="color: rgb(0, 0, 0); ">PostFormat_Plugin</span><span style="color: rgb(0, 0, 0); ">::</span><span style="color: rgb(30, 144, 255); ">getFormat</span>();<span style="color: rgb(76, 131, 23); ">?&gt;</span><br> &nbsp; &nbsp;<span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 170); ">if</span> (<span style="color: rgb(170, 0, 0); ">$format</span> <span style="color: rgb(0, 0, 0); ">==</span> <span style="color: rgb(170, 85, 0); ">&#39;post&#39;</span>) <span style="color: rgb(0, 0, 0); ">{</span> <span style="color: rgb(76, 131, 23); ">?&gt;</span><br><span style="color: rgb(0, 0, 0); "> &nbsp; &nbsp; &nbsp; &nbsp;// 一般文章形式</span><br> &nbsp; &nbsp;<span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 0); ">}</span> <span style="color: rgb(0, 0, 170); ">elseif</span> (<span style="color: rgb(170, 0, 0); ">$format</span> <span style="color: rgb(0, 0, 0); ">==</span> <span style="color: rgb(170, 85, 0); ">&#39;image&#39;</span><span style="color: rgb(0, 0, 0); ">){</span> <span style="color: rgb(76, 131, 23); ">?&gt;</span><br><span style="color: rgb(0, 0, 0); "> &nbsp; &nbsp; &nbsp; &nbsp;// 图片</span><br> &nbsp; &nbsp;<span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 0); ">}</span> <span style="color: rgb(0, 0, 170); ">elseif</span> (<span style="color: rgb(170, 0, 0); ">$format</span> <span style="color: rgb(0, 0, 0); ">==</span> <span style="color: rgb(170, 85, 0); ">&#39;phrase&#39;</span><span style="color: rgb(0, 0, 0); ">){</span> <span style="color: rgb(76, 131, 23); ">?&gt;</span><br><span style="color: rgb(0, 0, 0); "> &nbsp; &nbsp; &nbsp; &nbsp;// 短语 类似微博</span><br> &nbsp; &nbsp;<span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 0); ">}</span> <span style="color: rgb(0, 0, 170); ">elseif</span> (<span style="color: rgb(170, 0, 0); ">$format</span> <span style="color: rgb(0, 0, 0); ">==</span> <span style="color: rgb(170, 85, 0); ">&#39;link&#39;</span><span style="color: rgb(0, 0, 0); ">){</span> <span style="color: rgb(76, 131, 23); ">?&gt;</span><br><span style="color: rgb(0, 0, 0); "> &nbsp; &nbsp; &nbsp; &nbsp;// 链接</span><br> &nbsp; &nbsp;<span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 0); ">}</span><span style="color: rgb(76, 131, 23); ">?&gt;</span><br><span style="color: rgb(76, 131, 23); ">&lt;?php</span> <span style="color: rgb(0, 0, 170); ">endwhile</span>; <span style="color: rgb(76, 131, 23); ">?&gt;</span><br></div>

  
</div>
<p>如果你对这个插件感兴趣, 敬请关注:<br /><a href="http://mufeng.me">作者的博客</a><br /><a href="http://mufeng.me/post-format-of-typecho.html">主题发布页</a><br /></p>
<p>感谢你的支持与反馈 :)<br />作者: <a href="http://mufeng.me">MuFeng</a></p>