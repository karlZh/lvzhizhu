set tags=/home/lijie-pd/project/sbshenghuo/tags;
set autochdir
set nu
set foldmethod=syntax
set wrap
filetype plugin on
set tabstop=4
set softtabstop=4
set shiftwidth=4
set smartindent
set fileencodings=utf-8,gb2312,usc-bom,cp936,euc-cn
set termencoding=utf-8
set encoding=utf-8
set ff=unix
map <C-F12> :!ctags -R *<CR>
set autoindent
set formatoptions-=r
set nocompatible
if has("syntax")
	syntax on " 语法高亮
endif
filetype on
filetype plugin on
if has("autocmd")
	au BufReadPost * if line("'\"") > 1 && line("'\"") <= line("$") | exe "normal! g'\"" | endif
	filetype plugin indent on
endif
set ignorecase " 搜索模式里忽略大小写
set autowrite " 自动把内容写回文件: 如果文件被修改过，在每个 :next、:rewind、:last、:first、:previous、:stop、:suspend、:tag、:!、:make、CTRL-] 和 CTRL-^命令时进行；用 :buffer、CTRL-O、CTRL-I、'{A-Z0-9} 或 `{A-Z0-9} 命令转到别的文件时亦然。
set autoindent " 设置自动对齐(缩进)：即每行的缩进值与上一行相等；使用 noautoindent 取消设置
set smartindent " 智能对齐方式
set tabstop=4 " 设置制表符(tab键)的宽度
set softtabstop=4 " 设置软制表符的宽度
set shiftwidth=4 " (自动) 缩进使用的4个空格
set cindent " 使用 C/C++ 语言的自动缩进方式
set cinoptions={0,1s,t0,n-2,p2s,(03s,=.5s,>1s,=1s,:1s "设置C/C++语言的具体缩进方式
set backspace=2 " 设置退格键可用
set showmatch " 设置匹配模式，显示匹配的括号
set linebreak " 整词换行
set whichwrap=b,s,<,>,[,] " 光标从行首和行末时可以跳到另一行去
set hidden " Hide buffers when they are abandoned
set mouse=a " Enable mouse usage (all modes) "使用鼠标
set number " Enable line number "显示行号
set previewwindow " 标识预览窗口
set history=50 " set command history to 50 "历史记录50条
set laststatus=2 " 总显示最后一个窗口的状态行；设为1则窗口数多于一个的时候显示最后一个窗口的状态行；0不显示最后一个
set ruler " 标尺，用于显示光标位置的行号和列号，逗号分隔。每个窗口都有自己的标尺。如果窗口有状态行，标尺在那里显示。否则，它显示在屏幕的最后一行上。
set showcmd " 命令行显示输入的命令
set showmode " 命令行显示vim当前模式
set incsearch " 输入字符串就显示匹配点
set hlsearch
let Tlist_Show_One_File=1
let Tlist_Exit_OnlyWindow=1
set nocp
filetype plugin on
imap <C-S> <ESC>:w<CR>i
