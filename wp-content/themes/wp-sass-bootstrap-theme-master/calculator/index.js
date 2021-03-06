'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var Calculator = function (_React$Component) {
  _inherits(Calculator, _React$Component);

  function Calculator() {
    _classCallCheck(this, Calculator);

    var _this = _possibleConstructorReturn(this, (Calculator.__proto__ || Object.getPrototypeOf(Calculator)).call(this));

    _this.state = {
      result: 0,
      currentOp: null,
      currentNum: null,
      previousNum: null
    };

    document.addEventListener("keydown", _this.handleKeyDown.bind(_this));
    return _this;
  }

  _createClass(Calculator, [{
    key: 'handleKeyDown',
    value: function handleKeyDown(e) {
      switch (e.key) {
        case '0':
          this.handleNumberClick(0);
          break;
        case '1':
          this.handleNumberClick(1);
          break;
        case '2':
          this.handleNumberClick(2);
          break;
        case '3':
          this.handleNumberClick(3);
          break;
        case '4':
          this.handleNumberClick(4);
          break;
        case '5':
          this.handleNumberClick(5);
          break;
        case '6':
          this.handleNumberClick(6);
          break;
        case '7':
          this.handleNumberClick(7);
          break;
        case '8':
          this.handleNumberClick(8);
          break;
        case '9':
          this.handleNumberClick(9);
          break;
        case '.':
          this.handleNumberClick('.');
          break;
        case '=':
          this.handleOperationClick('=');
          break;
        case 'Enter':
          this.handleOperationClick('=');
          break;
        case '+':
          this.handleOperationClick('+');
          break;
        case '-':
          this.handleOperationClick('-');
          break;
        case '*':
          this.handleOperationClick('*');
          break;
        case '/':
          this.handleOperationClick('/');
          break;
        case 'C':
          this.clearClick();
          break;
        case 'c':
          this.clearClick();
          break;
        case 'Backspace':
          this.handleRemoveNumberClick();
          break;
      }
    }
  }, {
    key: 'calculateResult',
    value: function calculateResult() {
      var num = null,
          res = null;
      if (this.state.currentNum == null) {
        num = parseFloat(this.state.result);
      } else {
        num = parseFloat(this.state.currentNum);
      }
      res = num;
      switch (this.state.currentOp) {
        case '+':
          res = this.state.previousNum + num;
          break;
        case '-':
          res = this.state.previousNum - num;
          break;
        case '*':
          res = this.state.previousNum * num;
          break;
        case '/':
          res = this.state.previousNum / num;
          break;
        case '=':
          res = parseFloat(this.state.result);
          break;
      }
      this.setState({ result: res, previousNum: res, currentNum: null });
    }
  }, {
    key: 'handleNumberClick',
    value: function handleNumberClick(i) {
      if (this.state.currentOp == '=') {
        this.setState({ result: null, previousNum: null, currentOp: null, currentNum: "" + i });
      } else if (this.state.currentNum == null || this.state.currentNum === 0 || this.state.currentNum.toString().length < 1) {
        this.setState({
          currentNum: "" + i
        });
      } else {
        this.setState({
          currentNum: "" + this.state.currentNum + i
        });
      }
    }
  }, {
    key: 'handleRemoveNumberClick',
    value: function handleRemoveNumberClick() {
      if (this.state.currentNum != null) {
        if (this.state.currentNum.toString().length > 1) {
          this.setState({ currentNum: this.state.currentNum.slice(0, -1) });
        } else {
          this.setState({ currentNum: 0 });
        }
      }
    }
  }, {
    key: 'handleOperationClick',
    value: function handleOperationClick(op) {
      if (this.state.currentNum != null) {
        this.calculateResult();
      }
      switch (op) {
        case '+':
          this.setState({ currentOp: '+' });
          break;
        case '-':
          this.setState({ currentOp: '-' });
          break;
        case '*':
          this.setState({ currentOp: '*' });
          break;
        case '/':
          this.setState({ currentOp: '/' });
          break;
        case '=':
          this.setState({ currentOp: '=' });
          this.calculateResult();
          break;
      }
    }
  }, {
    key: 'clearClick',
    value: function clearClick() {
      this.setState({
        result: 0,
        currentOp: null,
        currentNum: 0,
        previousNum: null
      });
    }
  }, {
    key: 'changeSign',
    value: function changeSign() {
      if (this.state.currentNum != null) {
        this.setState({ currentNum: -1 * this.state.currentNum });
      } else {
        this.setState({ result: -1 * this.state.result });
      }
    }
  }, {
    key: 'render',
    value: function render() {
      var _this2 = this;

      return React.createElement(
        'div',
        { className: 'calc' },
        React.createElement(
          'div',
          { className: 'result' },
          React.createElement(
            'p',
            null,
            this.state.currentNum != null ? this.state.currentNum : this.state.result
          )
        ),
        React.createElement(Grid, { onClick: function onClick(i) {
            return _this2.handleNumberClick(i);
          }, onOpClick: function onOpClick(x) {
            return _this2.handleOperationClick(x);
          }, clearClick: function clearClick() {
            return _this2.clearClick();
          }, clearCurrentClick: function clearCurrentClick() {
            return _this2.handleRemoveNumberClick();
          }, changeSign: function changeSign() {
            return _this2.changeSign();
          } })
      );
    }
  }]);

  return Calculator;
}(React.Component);

var Grid = function (_React$Component2) {
  _inherits(Grid, _React$Component2);

  function Grid() {
    _classCallCheck(this, Grid);

    return _possibleConstructorReturn(this, (Grid.__proto__ || Object.getPrototypeOf(Grid)).apply(this, arguments));
  }

  _createClass(Grid, [{
    key: 'renderButton',
    value: function renderButton(i) {
      var _this4 = this;

      if (i == 0) {
        return React.createElement(Button, {
          value: i,
          onClick: function onClick() {
            return _this4.props.onClick(i);
          },
          classVal: 'zero'
        });
      } else {
        return React.createElement(Button, {
          value: i,
          onClick: function onClick() {
            return _this4.props.onClick(i);
          }
        });
      }
    }
  }, {
    key: 'renderOpButton',
    value: function renderOpButton(x) {
      var _this5 = this;

      return React.createElement(Button, {
        value: x,
        onClick: function onClick() {
          return _this5.props.onOpClick(x);
        },
        classVal: 'ops'
      });
    }
  }, {
    key: 'render',
    value: function render() {
      return React.createElement(
        'div',
        { className: 'grid' },
        React.createElement(
          'div',
          { className: 'row' },
          React.createElement(Button, { value: 'AC', classVal: 'top-op', onClick: this.props.clearClick }),
          React.createElement(Button, { value: '+/-', classVal: 'top-op', onClick: this.props.changeSign }),
          React.createElement(Button, { value: '\u232B', classVal: 'top-op', onClick: this.props.clearCurrentClick }),
          this.renderOpButton('/')
        ),
        React.createElement(
          'div',
          { className: 'row' },
          this.renderButton(7),
          this.renderButton(8),
          this.renderButton(9),
          this.renderOpButton('*')
        ),
        React.createElement(
          'div',
          { className: 'row' },
          this.renderButton(4),
          this.renderButton(5),
          this.renderButton(6),
          this.renderOpButton('-')
        ),
        React.createElement(
          'div',
          { className: 'row' },
          this.renderButton(1),
          this.renderButton(2),
          this.renderButton(3),
          this.renderOpButton('+')
        ),
        React.createElement(
          'div',
          { className: 'row' },
          this.renderButton(0),
          this.renderButton('.'),
          this.renderOpButton('=')
        )
      );
    }
  }]);

  return Grid;
}(React.Component);

var Button = function (_React$Component3) {
  _inherits(Button, _React$Component3);

  function Button() {
    _classCallCheck(this, Button);

    return _possibleConstructorReturn(this, (Button.__proto__ || Object.getPrototypeOf(Button)).apply(this, arguments));
  }

  _createClass(Button, [{
    key: 'render',
    value: function render() {
      return React.createElement(
        'button',
        { onClick: this.props.onClick, className: this.props.classVal },
        this.props.value
      );
    }
  }]);

  return Button;
}(React.Component);