from flask import Flask, render_template

app = Flask(__name__)

text = """private void ReArrange(IComparable item) {
            currentNode.color = Red;  
            currentNode.left.color = Color.Black;  
            currentNode.right.color = Color.Black;  
            if (parentNode.color == Color.Red) {  
                grandParentNode.color = Color.Red;  
                bool compareWithGrandParentNode = (Compare(item, grandParentNode) < 0);  
                bool compareWithParentNode = (Compare(item, parentNode) < 0);  
                if (compareWithGrandParentNode != compareWithParentNode) parentNode = Rotate(item, grandParentNode);  
                currentNode = Rotate(item, tempNode);  
                currentNode.color = Black;  
            }  
            root.right.color = Color.Black;  
        }  
        private Node Rotate(IComparable item, Node parentNode) {  
            int value;  
            if (Compare(item, parentNode) < 0) {  
                value = Compare(item, parentNode.left);  
                if (value < 0) parentNode.left = this.Rotate(parentNode.left, Direction.Left);  
                else parentNode.left = this.Rotate(parentNode.left, Direction.Right);  
                return parentNode.left;  
            } else {  
                value = Compare(item, parentNode.right);  
                if (value < 0) parentNode.right = this.Rotate(parentNode.right, Direction.Left);  
                else parentNode.right = this.Rotate(parentNode.right, Direction.Right);  
                return parentNode.right;  
            }  
        }  
        private Node Rotate(Node node, Direction direction) {  
            Node tempNode;  
            if (direction == Direction.Left) {  
                tempNode = node.left;  
                node.left = tempNode.right;  
                tempNode.right = node;  
                return tempNode;  
            } else {  
                tempNode = node.right;  
                node.right = tempNode.left;  
                tempNode.left = node;  
                return tempNode;  
            }  
        }
"""

@app.route('/')
def index():
    return render_template('cp.html', codeContent = text)

if __name__ == '__main__':
    app.run(debug=True)