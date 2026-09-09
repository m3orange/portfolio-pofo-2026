


<!--
Original Pen: https://codepen.io/vanholtzco/pen/bNwBQBY
-->


			<div class="g4-globe">
				<div class="g4-ring g4-ring-outer"></div>
				<div class="g4-ring-wrap">
					<div class="g4-ring g4-ring-left"></div>
					<div class="g4-ring g4-ring-center is-default"></div>
					<div class="g4-ring g4-ring-right"></div>
				</div>
			</div>



    <style>

        /* 04 */
        .g4-globe {
            position: relative;
            width: 320px;
            height: 240px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: -14px;
            margin-top: 12px;
        }

        .g4-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .g4-ring-outer {
            width: 220px;
            height: 220px;
            border: 1.5px solid #e9e9ea;
        }

        .g4-ring-wrap {
            position: absolute;
            inset: 0;
        }

        .g4-ring-left,
        .g4-ring-center,
        .g4-ring-right {
            width: 220px;
            height: 220px;
            border: 3px dashed var(--grid);
            opacity: 1;
            backface-visibility: visible;
        }

        .g4-ring-center.is-default {
            border-style: solid;
            border-color:  #F41800;
            opacity: 1;
        }


    </style>

