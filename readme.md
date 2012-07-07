﻿<h3>PostFormat 文章形式</h3>
<ul>
<li>当前版本: 1.0.0<br /></li>
<li>更新时间: 2012.7.7</li>
</ul>
<h3>使用方法</h3>
<ol>
<li>解压文件, 将插件复制到<code>build/usr/plugins/</code>文件夹下, 然后激活;</li>
<li>本插件提供了6种文章形式:<code>标准</code>, <code>短语</code>, <code>视频</code>, <code>音乐</code>, <code>图像</code>, <code>链接</code>;</li>
</ol>
<h3>设置选项</h3>
<div class="highlight">
<pre><div class="line" id="LC1"><span class="cp">&lt;?php</span> <span class="k">while</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">next</span><span class="p">())</span><span class="o">:</span> <span class="nv">$format</span> <span class="o">=</span> <span class="nx">PostFormat_Plugin</span><span class="o">::</span><span class="na">getFormat</span><span class="p">();</span><span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="LC2"><span class="x">	</span><span class="cp">&lt;?php</span> <span class="k">if</span> <span class="p">(</span><span class="nv">$format</span> <span class="o">==</span> <span class="s1">'post'</span><span class="p">)</span> <span class="p">{</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="LC3"><span class="x">		// 一般文章形式</span></div><div class="line" id="LC4"><span class="x">	</span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$format</span> <span class="o">==</span> <span class="s1">'image'</span><span class="p">){</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="LC5"><span class="x">		// 图片</span></div><div class="line" id="LC6"><span class="x">	</span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$format</span> <span class="o">==</span> <span class="s1">'phrase'</span><span class="p">){</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="LC7"><span class="x">		// 短语 类似微博</span></div><div class="line" id="LC8"><span class="x">	</span><span class="cp">&lt;?php</span> <span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$format</span> <span class="o">==</span> <span class="s1">'link'</span><span class="p">){</span> <span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="LC9"><span class="x">		// 链接</span></div><div class="line" id="LC10"><span class="x">	</span><span class="cp">&lt;?php</span> <span class="p">}</span><span class="cp">?&gt;</span><span class="x"></span></div><div class="line" id="LC11"><span class="cp">&lt;?php</span> <span class="k">endwhile</span><span class="p">;</span> <span class="cp">?&gt;</span><span class="x"></span></div></pre>
</div>
<p>如果你对这个插件感兴趣, 敬请关注:<br /><a href="http://mufeng.me">作者的博客</a><br /><a href="http://mufeng.me/post-format-of-typecho.html">主题发布页</a><br /></p>
<p>感谢你的支持与反馈 :)<br />作者: <a href="http://mufeng.me">MuFeng</a></p>