$(function(){
	// #banner框
	var $banner = $("#banner");
	var $content = $banner.find(".ban_content");
	// ul点击移动元素
	var $ul =$content.children("ul");
	// lis
	var $lis = $ul.children();
	var len = $lis.length;
	// 某个li的宽
	var w = 0;
	var index = 0;
	// 上一张与下一张
	var $next = $banner.find(".next");
	var $prev = $banner.find(".prev");
	var $dots =  $banner.find(".dots");
	// 克隆
	var $cloneFirstLi = $lis.first().clone();
	var $cloneLastLi = $lis.last().clone();
	// 小圆点
	var spans = "";
	// 轮播图是否播放
	var flag = false;
	// 定时器存储
	var timer = null;
	// 将content向左侧移动一个单位，找到子元素ul设置宽，将克隆的元素分别放入到ul内部的前面与后面
	$content.width(100*(len+2)+"%").css("marginLeft",-100+"%").children().append($cloneFirstLi).prepend($cloneLastLi).children().width(100/(len+2)+"%");
	w = $lis.width();
	// 小圆点创建
	$lis.each(function(){ spans += "<span></span>" })
	// 创建spans找到第一个添加class，spans包裹div.wrap再找到 .wrap 将其追加到div.dots内
	$(spans).first().addClass("active").end().wrapAll("<div class='wrap'/>").parent().appendTo("#banner .dots");
	// 点击 右按钮 下一张
	$next.click(function(){
		// 防止重复点击bug
		if(flag){return}
		flag = true;
		//让ul进行移动
		$ul.animate({left:-w*(++index)},500,function(){
			flag = false;
			// 最后一张(克隆追加进去)，放到初始第一张
			if(index>=len){
				$ul.css("left",index = 0);
			}
		})
		// 小圆点切换
		$dots.find("span").removeClass().eq(index%len).addClass("active");
		
	})
	$prev.click(function(){
		if(flag){return}
		flag = true;
		//让ul进行移动
		$ul.animate({left:-w*(--index)},500,function(){
			flag = false;
			// 处理起左按钮点击后到达克隆的这张张，拉回到尾部的最后一张
			if(index<0){
				index = len-1;
				$ul.css("left",-w*index);
			}
		})
		$dots.find("span").removeClass().eq(index).addClass("active");
	})
	// 小圆点点击切换
	$dots.find("span").click(function(){
		if(flag){return}
		// 获取点击索引，同步到父作用域内的index变量
		index = $(this).index()
		// 移动
		$ul.animate({left:-w*index},500)
		// 小圆点切换
		$dots.find("span").removeClass().eq(index).addClass("active");
	})
	// 自动播放的方法
	function play(){
		timer = setInterval(function(){
			$next.trigger("click");
		},4000)
	}
	play()
	// 暂停的方法
	function pause(){
		clearInterval(timer)
	}
	// 鼠标移入暂停播放，移除再自动播放
	$banner.hover(pause,play);
})